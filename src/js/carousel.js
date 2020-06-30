import Siema from 'siema';

document.addEventListener('DOMContentLoaded', () => {
  const numberOfComics = 10;
  const comicSlots = new Siema({
    perPage: 7,
    loop: true,
    startIndex: Math.floor(Math.random() * numberOfComics),
  });
  document
    .querySelector('.previous_slot')
    .addEventListener('click', () => comicSlots.prev());
  document
    .querySelector('.next_slot')
    .addEventListener('click', () => comicSlots.next());
});
