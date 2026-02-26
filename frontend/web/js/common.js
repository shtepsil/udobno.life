const cl = console.log;

const LOG_LEVEL = 'debug';
// 'none' | 'error' | 'warn' | 'info' | 'debug'

const levels = {
    none: 0,
    error: 1,
    warn: 2,
    info: 3,
    debug: 4,
};

// const canLog = (level) => levels[level] <= levels[LOG_LEVEL];
const canLog = (level) => true;

const log = {
    error: (...args) => canLog('error') && console.error('❌', ...args),
    warn: (...args) => canLog('warn') && console.warn('⚠️', ...args),
    info: (...args) => canLog('info') && console.info('ℹ️', ...args),
    debug: (...args) => canLog('debug') && console.log('🐞', ...args),
};

// ======================================
// AJAX helper
// ======================================

// Показываем/скрываем loader
const loader = {
    show: (duration = 100) => $('.loader').fadeIn(duration),
    hide: (duration = 100) => $('.loader').fadeOut(duration),
};

// Вывод результата для дебага
const res = (data, resClass = '.res') => {
    let container = $(resClass);
    container.html('');
    if (typeof data !== 'undefined') {
        if (data === 'result') {
            container.text(data);
        } else {
            container.html('<pre>' + prettyPrintJson.toHtml(data) + '</pre>');
        }
    }
};

// Общая функция для ajax
const send = async (url, params = {}, method = 'post', options = {}) => {
    if (!url) throw new Error('Не передан URL');

    // Опции: beforeSend, debug
    const beforeSend = options.beforeSend || (() => loader.show());
    const debug = options.debug || false;

    try {
        const data = await $.ajax({
            url,
            type: method,
            dataType: 'json',
            cache: false,
            data: params,
            beforeSend,
        });

        if (debug) {
            log.debug({ url, params, response: data });
            res(data);
        }
        return data;
    } catch (err) {
        if (debug) {
            log.debug({ url, params, error: err });
            res(err);
        }
        throw err;
    } finally {
        loader.hide();
    }
};

// Алиасы для удобства
const sendPost = (url, params = {}, options = {}) =>
    send(url, params, 'post', options);
const sendGet = (url, params = {}, options = {}) =>
    send(url, params, 'get', options);

// Удаление \r\n, \r, \n из строки
function cleanRN(str) {
    var find = '\\r\\n';
    var regex = new RegExp(find, 'g');
    str = str.replace(regex, '');

    var find2 = '\\r';
    var regex2 = new RegExp(find2, 'g');
    str = str.replace(regex2, '');

    var find3 = '\\n';
    var regex3 = new RegExp(find3, 'g');
    str = str.replace(regex3, '');
    return str;
}
