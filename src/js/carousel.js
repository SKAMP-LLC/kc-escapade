import Siema from 'siema';

document.addEventListener('DOMContentLoaded', () => {
  if (document.body.contains(document.querySelector('.siema'))) {
    const numberOfComics = 13;
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
  }
});
