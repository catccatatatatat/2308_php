const BTN_API = document.querySelector('#btn-api');
BTN_API.addEventListener('click', my_fetch);

function my_fetch() {
	const INPUT_URL = document.querySelector('#input-url');

	fetch(INPUT_URL.value.trim())
	.then( response => {
		if( response.status >= 200 && response.status < 300 ){
			return response.json();
		} else {
			throw new Error('에러에러');
		}
	} )
	.then( data => makeImg(data) )
	.catch( error => console.log(error) );
}

function makeImg(data) {
	data.forEach( item => {
		const NEW_DIV_ARTICLE = document.createElement('div');
		const NEW_DIV_ARTICLE_ID = document.createElement('div');
		const NEW_IMG = document.createElement('img');
		const DIV_MAIN = document.querySelector('.main');

		NEW_DIV_ARTICLE.classList = 'article';
		NEW_DIV_ARTICLE_ID.classList = 'div-article-id';
		NEW_IMG.classList = 'div-article-img';

		NEW_DIV_ARTICLE_ID.innerHTML = item.id;
		NEW_IMG.setAttribute('src', item.download_url);
		
		NEW_DIV_ARTICLE.appendChild(NEW_DIV_ARTICLE_ID);
		NEW_DIV_ARTICLE.appendChild(NEW_IMG);
		DIV_MAIN.appendChild(NEW_DIV_ARTICLE);
	});
}

const BTN_delete = document.querySelector('#btn-delete');
BTN_delete.addEventListener('click', imgdelete);

function imgdelete() {
	const DIV_MAIN = document.querySelector('.main');
	DIV_MAIN.innerHTML = "";

}