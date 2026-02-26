(function ($) {
    // Контейнеры для стека уведомлений
    const containers = {};

    // Стандартные настройки
    const defaults = {
        type: 'info', // success, error, info, warning
        duration: 4000, // время жизни в мс
        closable: true, // крестик
        showProgress: true, // прогресс-бар
        position: 'top-right', // top-left, top-right, bottom-left, bottom-right
        maxStack: 5, // макс. количество уведомлений в стеке
    };

    // Цвета по типу уведомления
    const colors = {
        success: '#28a745',
        error: '#dc3545',
        info: '#17a2b8',
        warning: '#ffc107',
    };

    // Основная функция
    $.notify = function (message, titleOrOptions, options) {
        let title = '';
        let opts = {};

        if (typeof titleOrOptions === 'string') {
            title = titleOrOptions;
            opts = options || {};
        } else if (typeof titleOrOptions === 'object') {
            opts = titleOrOptions || {};
        }

        opts = $.extend({}, defaults, opts);

        if (!containers[opts.position]) {
            const container = $(
                '<div class="notify-container"></div>',
            ).addClass(opts.position);
            $('body').append(container);
            containers[opts.position] = container;
        }

        const container = containers[opts.position];

        if (container.children().length >= opts.maxStack) {
            container.children().last().remove();
        }

        const bgColor = colors[opts.type] || colors.info;
        const progressColor = shadeColor(bgColor, -20); // чуть темнее

        const notify = $('<div class="notify"></div>')
            .addClass(opts.type)
            .css('background', bgColor)
            .css('color', opts.type === 'warning' ? '#000' : '#fff'); // читаемый текст

        // Добавляем заголовок, если есть
        if (title) {
            notify.append('<div class="notify-title">' + title + '</div>');
        } else {
            // Если заголовка нет, добавляем класс для дополнительного отступа
            notify.addClass('no-title');
        }

        // Добавляем само сообщение
        notify.append('<div class="notify-message">' + message + '</div>');

        // Крестик закрытия
        if (opts.closable) notify.append('<span class="notify-close">✖</span>');

        // Прогресс бар
        if (opts.showProgress) {
            notify.append('<div class="notify-progress"></div>');
        }

        container.prepend(notify);

        setTimeout(() => notify.addClass('show'), 10);

        // Прогресс-бар слева-направо
        if (opts.showProgress) {
            const bar = notify.find('.notify-progress');
            bar.css({
                background: progressColor,
                transition: `width ${opts.duration}ms linear`,
                width: '0%',
            });
            setTimeout(() => bar.css('width', '100%'), 20);
        }

        const timeoutId = setTimeout(() => removeNotify(notify), opts.duration);

        notify.find('.notify-close').on('click', function () {
            clearTimeout(timeoutId);
            removeNotify(notify);
        });

        notify.on('click', function () {
            clearTimeout(timeoutId);
            removeNotify(notify);
        });

        function removeNotify(el) {
            el.removeClass('show');
            setTimeout(() => el.remove(), 300);
        }

        return notify;
    };

    window.n = {
        success: function (msg, titleOrDuration, duration) {
            processWrapper('success', msg, titleOrDuration, duration);
        },
        error: function (msg, titleOrDuration, duration) {
            processWrapper('error', msg, titleOrDuration, duration);
        },
        info: function (msg, titleOrDuration, duration) {
            processWrapper('info', msg, titleOrDuration, duration);
        },
        warning: function (msg, titleOrDuration, duration) {
            processWrapper('warning', msg, titleOrDuration, duration);
        },
    };

    function processWrapper(type, msg, arg2, arg3) {
        let opts = { type: type };
        let title = '';
        let duration;

        if (typeof arg2 === 'string' && arg3 !== undefined) {
            title = arg2;
            duration = arg3;
        } else if (typeof arg2 === 'string') {
            title = arg2;
        } else if (typeof arg2 === 'number') {
            duration = arg2;
        }

        if (duration) opts.duration = duration;

        $.notify(msg, title || opts, opts);
    }

    // Функция для затемнения/осветления цвета
    function shadeColor(color, percent) {
        const f = parseInt(color.slice(1), 16),
            t = percent < 0 ? 0 : 255,
            p = percent < 0 ? percent * -1 : percent;
        const R = f >> 16,
            G = (f >> 8) & 0x00ff,
            B = f & 0x0000ff;
        return (
            '#' +
            (
                0x1000000 +
                (Math.round(((t - R) * p) / 100) + R) * 0x10000 +
                (Math.round(((t - G) * p) / 100) + G) * 0x100 +
                (Math.round(((t - B) * p) / 100) + B)
            )
                .toString(16)
                .slice(1)
        );
    }

    // Стили
    const css = `
.notify-container{
    position: fixed;
    z-index: 9999;
    display: flex;
    flex-direction: column;
    gap: 10px;
    max-width: 320px;
    min-width: 240px;
}
.notify-container.top-right{top:20px; right:20px;}
.notify-container.top-left{top:20px; left:20px;}
.notify-container.bottom-right{bottom:20px; right:20px;}
.notify-container.bottom-left{bottom:20px; left:20px;}

.notify{
    padding: 12px 16px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    opacity:0;
    transform: translateY(-20px);
    cursor: pointer;
    overflow: hidden;
    transition: all 0.3s ease;
    position: relative;
}
.notify.show{
    opacity:1;
    transform: translateY(0);
}
.notify-title{
    font-weight: bold;
    margin-bottom: 5px;
}
.notify.no-title .notify-message {
    padding-right: 24px; /* чтобы текст не перекрывал крестик */
}
.notify .notify-title + .notify-message {
    padding-right: 24px; /* тоже немного отступа если есть заголовок */
}
.notify-close{
    position: absolute;
    top:8px;
    right:8px;
    cursor:pointer;
    font-weight: bold;
}
.notify-progress{
    position:absolute;
    bottom:0;
    left:0;
    height:4px;
    width:0%;
}
`;
    $('<style>').text(css).appendTo('head');
})(jQuery);
