document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const notice = document.querySelector('.notice');
      if (notice) notice.style.display = 'block';
      window.scrollTo({top:0, behavior:'smooth'});
    });
  });
});
