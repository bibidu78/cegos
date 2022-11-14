const {selector, calls} = window.cegos_scripts;

const [submenu] = selector("#Submenu");
const children = selector('#Submenu  span ', submenu);
const reducer = (prev, current) => prev + current;
const size = children.map(item => Math.round(item.getBoundingClientRect().width + 26));
const width = size.reduce(reducer);
submenu.style.width = `${width}px`;
children.map((item) => item.addEventListener('click', (e) => {
    const mobileOnly = window.matchMedia("(max-width: 767px)");
    if (mobileOnly.matches) {
        const itemleft = e.target.getBoundingClientRect().left;
        const submenuleft = submenu.getBoundingClientRect().left;
        const left = (itemleft - submenuleft)/2;
        submenu.style.transform = `translateX(-${left}px)`;
    }
    children.map(item => item.classList.remove('active'));
    e.target.classList.add('active');
}));