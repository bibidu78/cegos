const { selector, calls } = window.cegos_scripts;

const [header] = selector("#header");
const [mainNav] = selector(".main-nav");

const Debounce = (callback, timeout = 300) => {
    let time;
    return (...args) => {
        clearTimeout(time);
        time = setTimeout(() => {
            callback(...args);
        }, timeout);
    };
};
window.addEventListener('scroll', e => {
    if (window.scrollY > header.offsetHeight) {
        header.classList.add('header-fixed');
        mainNav.style.transition = "none";
        setTimeout(Debounce(() => {
            mainNav.style.transition = ".5s";
        }), 300);
    } else {
        header.classList.remove('header-fixed');
    }
});
const btns = selector('#burger', header);
btns.map(btn => {
    btn.addEventListener('click', (e) => {
        const [main] = selector('.main-nav');
        main.classList.toggle('open');
        btns.map(item => item.classList.toggle('active'));
    });
});