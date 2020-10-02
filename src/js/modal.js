import Cookies from 'js-cookie';

function createModal () {
  if (document.body.contains(document.querySelector('.modal'))) {
    document.querySelector('#comic').classList.add('nsfw');
    document.querySelector('.modal').addEventListener('click', () => destroyModal());
  }
}

function destroyModal () {
  document.querySelector('#comic').classList.remove('nsfw');
  document.querySelector('.modal').remove();
  Cookies.set('show-nsfw', true, { expires: 365 });
}

document.addEventListener('DOMContentLoaded', () => {
  if (Cookies.get('show-nsfw') === 'true') {
    destroyModal();
  } else {
    createModal();
  }
});
