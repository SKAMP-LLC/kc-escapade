import Siema from "siema";

document.addEventListener("DOMContentLoaded", () => {
  const number_of_comics = 10;
  const comicSlots = new Siema({
    perPage: 7,
    loop: true,
    startIndex: Math.floor(Math.random() * number_of_comics),
  });
  document
    .querySelector(".previous_slot")
    .addEventListener("click", () => comicSlots.prev());
  document
    .querySelector(".next_slot")
    .addEventListener("click", () => comicSlots.next());
});
