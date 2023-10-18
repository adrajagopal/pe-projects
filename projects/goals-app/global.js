export function createElementVar(elementName) {
	return document.querySelector(`${elementName}`);
}

//*************************** PAGE STRUCTURE/variables

export const $header = createElementVar('header inner-column');
export const $main = createElementVar('main inner-column');
export const $footer = createElementVar('footer inner-column');

export const database = window.localStorage;