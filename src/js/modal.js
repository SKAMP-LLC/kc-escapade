import Cookies from 'js-cookie';

function cookieExists () {
  return Cookies.get('show-nsfw') === 'true';
}

function modalExists () {
  return document.body.contains(document.querySelector('.modal'));
}

function createModal () {
  document.querySelector('#comic').classList.add('nsfw');
  document.querySelector('.modal').addEventListener('click', () => destroyModal());
}

function destroyModal () {
  document.querySelector('#comic').classList.remove('nsfw');
  document.querySelector('.modal').remove();
  Cookies.set('show-nsfw', true, { expires: 365, sameSite: 'strict' });
}

document.addEventListener('DOMContentLoaded', () => {
  if (modalExists()) {
    if (cookieExists()) {
      destroyModal();
    } else {
      createModal();
    }
  }
});
