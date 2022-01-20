import { Editor } from 'https://cdn.skypack.dev/@tiptap/core?min'
import StarterKit from 'https://cdn.skypack.dev/@tiptap/starter-kit?min'

document.addEventListener('DOMContentLoaded', function() {
    const editor = new Editor({
        element: document.querySelector('#editorjs'),
        extensions: [
            StarterKit,
        ],
        content: 'Hello World!',
    });

    let btnParagraph = document.getElementById('btn-paragraph');
    let btnBold = document.getElementById('btn-bold');
    let btnItalics = document.getElementById('btn-italics');
    let btnUnderline = document.getElementById('btn-underline');


    btnBold.addEventListener('click', function () {
        editor.chain().focus().toggleBold().run();
    });

    btnBold.addEventListener('click', function () {
        editor.chain().focus().toggleBold().run();
    });

    btnItalics.addEventListener('click', function () {
        editor.chain().focus().toggleItalic().run();
    });

    btnBold.addEventListener('click', function () {
        editor.chain().focus().toggleBold().run();
    });


});

let btnCheck = document.getElementById('btn-content-check');

btnCheck.onclick = function(event) {

    let content = document.querySelector('.ProseMirror').innerHTML;
    console.log(content);

    return false;
}

const slider = document.querySelector('.calculator-slider');
const value = slider.value;
let calcValue = document.querySelector('.calculator-top_value');
let moneyDay = document.querySelector('.calculator-bottom__day-value');
let moneyMonth = document.querySelector('.calculator-bottom__month-value');

slider.style.background = `linear-gradient(to right, #FFB41D 0%, #FFB41D ${value}%, #fff0d6 ${value}%, #fff0d6 100%)`;
calcValue.innerText = value;
moneyDay.innerText = value*50;
moneyMonth.innerText = value*1500;

slider.addEventListener('input', function() {
    const value = this.value;
    let calcValue = document.querySelector('.calculator-top_value');
    let moneyDay = document.querySelector('.calculator-bottom__day-value');
    let moneyMonth = document.querySelector('.calculator-bottom__month-value');

    this.style.background = `linear-gradient(to right, #FFB41D 0%, #FFB41D ${value}%, #fff0d6 ${value}%, #fff0d6 100%)`;

    calcValue.innerText = value;
    moneyDay.innerText = value*50;
    moneyMonth.innerText = value*1500;
});

let checkHeadingInput = document.querySelector('.check-content__heading__input');
let checkHeadingInputLength = checkHeadingInput.value;

let checkTextInput = document.querySelector('.ProseMirror');

let valHeadingInput = document.querySelector('.check-content__heading__characters__now');
let valTextInput = document.querySelector('.check-content__text__characters__now');
function countLetters() {
    const textlength = checkHeadingInput.value.length; // #2
    valHeadingInput.innerText = `${textlength}`; // #3
}
checkHeadingInput.addEventListener('input', countLetters());
