document.querySelectorAll('.custom-radio').forEach(radio => {
  radio.addEventListener('click', e => e.stopPropagation());
});