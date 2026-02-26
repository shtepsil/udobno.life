/**
 * Открывает модалку по селектору
 * @param {string|HTMLElement} selector - id модалки или сам DOM-элемент
 */
function openModal(selector) {
    // получаем DOM-элемент
    const modal =
        typeof selector === 'string'
            ? document.querySelector(selector)
            : selector;
    if (!modal) return;

    // ищем .modal-dialog внутри модалки
    const dialog = modal.querySelector('.modal-dialog');
    if (!dialog) return;

    // предотвращаем всплытие кликов на dialog
    dialog.addEventListener('click', (e) => e.stopPropagation());

    // добавляем классы для отображения
    modal.classList.add('show');
    document.body.classList.add('no-scroll');

    // маленькая задержка, чтобы сработала анимация
    setTimeout(() => {
        dialog.style.transform = 'none';
        dialog.style.opacity = '1';
    }, 1);
}

/**
 * Закрывает модалку по селектору
 * @param {string|HTMLElement} selector - id модалки или сам DOM-элемент
 */
function closeModal(selector) {
    // получаем DOM-элемент
    const modal =
        typeof selector === 'string'
            ? document.querySelector(selector)
            : selector;

    if (!modal) return;

    // ищем .modal-dialog внутри модалки
    const dialog = modal.querySelector('.modal-dialog');
    if (dialog) {
        dialog.removeAttribute('style');
    }

    // плавное закрытие
    setTimeout(() => {
        modal.classList.remove('show');
        document.body.classList.remove('no-scroll');
    }, 200);
}
