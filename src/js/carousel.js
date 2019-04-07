import Siema from 'siema';

document.addEventListener("DOMContentLoaded", () => {
  const comicSlots = new Siema({
    perPage: 7,
    loop: true
  });
  document.querySelector('.previous_slot').addEventListener('click', () => comicSlots.prev());
  document.querySelector('.next_slot').addEventListener('click', () => comicSlots.next());
});
