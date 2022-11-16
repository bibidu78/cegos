function selector(element, root) {
    const select = root || document;
    return [...select.querySelectorAll(element)];
};

const [body,header] = selector("body,header");
const btn = selector(".Header_open");
const [menu] = selector(".Header_menu");
const [main] = selector("main");
console.log(selector("body,header"));

function translate(e) {
    main.classList.toggle('active');
    body.classList.toggle('active');
    menu.parentNode.classList.toggle('active');
}

btn.map(item => item.addEventListener("click", translate));

const childMenu = selector('.Header_menu_item',menu);

childMenu.map(item => {
    item.addEventListener('click', (e) => {
        const [subMenu] = [...item.children];
        const targetElement = e.target;
        if(targetElement.tagName === "A") {
            window.location.href =  targetElement.href;
            return;
        };
        if(subMenu === undefined) return;
        const [elementInner] = selector('.pinner', item);
        if(elementInner === undefined) {
            const [text] = item.innerText.split('\n');
            const elementP =  document.createElement('p');
            elementP.classList.add('pinner');
            elementP.innerHTML = text.trim();
            subMenu.insertBefore(elementP, subMenu.children[0]);
        }
        subMenu.classList.toggle('active');
        menu.querySelector('.Header_inner').classList.toggle('active');
    });
});
const {height} = header.getBoundingClientRect();


window.addEventListener('scroll', e => {
    if(window.scrollY > height) {
        header.style.position = "sticky";
        header.style.zIndex = "30";
        header.style.top = "0";
        header.classList.add('sticky');
    } else {
        header.style.position = "relative";
        header.classList.contains('sticky') && (header.style.top = window.scrollY +"px");
        window.scrollY === 0 && (header.classList.remove('sticky'));
    }
})
