function selector(element, root) {
    const select = root || document;
    return [...select.querySelectorAll(element)];
};

const [body] = selector("body");
const btn = selector(".Header_open");
const [menu] = selector(".Header_menu");
const [main] = selector("main");

function translate(e) {
    main.classList.toggle('active');
    body.classList.toggle('active');
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
        menu.classList.toggle('active');
    });
});