function destroyModal () {
  document.querySelector('#comic').classList.remove('nsfw');
  document.querySelector('.modal').remove();
}

document.addEventListener('DOMContentLoaded', () => {
  if (document.body.contains(document.querySelector('.modal'))) {
    document.querySelector('#comic').classList.add('nsfw');
    document.querySelector('.modal').addEventListener('click', () => destroyModal());
  }
});
