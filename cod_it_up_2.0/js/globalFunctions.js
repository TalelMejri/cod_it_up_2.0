// This two functions for selecting element from html
const selectItem = (element, target = document) => target.querySelector(element);
const selectItems = (element, target = document) => target.querySelectorAll(element);

// hide and unhide element
const hide = (element) => selectItem(element).classList.add('hidden');
const unhide = (element) => selectItem(element).classList.remove('hidden');

// toggle classes

const toggle = (element, className) => selectItem(element).classList.toggle(className);

// this functions for modal