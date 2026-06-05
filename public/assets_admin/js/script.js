document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', (e) => {
      // só rola pra cima, não cancela o envio
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  });
});