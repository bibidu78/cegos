// import {
//     createSignal,
//     onCleanup,
// } from "https://cdn.skypack.dev/solid-js";
// import { render } from "https://cdn.skypack.dev/solid-js/web";
// import html from "https://cdn.skypack.dev/solid-js/html";

console.log(React);
class Cutome extends HTMLElement {
    constructor() {
        // Always call parent constructor first
        super();

        // Get template content from DOM
        // this.innerHTML = name;
        // const solid = {
        //     createSignal,
        //     onCleanup, render,
        //     html
        // }
        callback && callback(this);
    }
}

customElements.define(name, Cutome);
const test = ({ name = "cool-timer", callback }) => {
};

test({
    name: "karim-editor",
    callback: (that) => {
        const render = ReactDOM.render;
        const App = () => {
            return <div>lorem</div>;
        };
        render(App, that);
    }
});

