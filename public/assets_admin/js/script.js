document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', (e) => {
      // só rola pra cima, não cancela o envio
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  });
});

function atualizarPreview(nome) {
  const img = document.getElementById('previewImagem');
  if (nome) {
    img.src = '/Assets/img/' + nome;
    img.style.display = 'block';
  } else {
    img.style.display = 'none';
  }
}

function toggleNovaCategoria(select) {
  const input = document.getElementById('novaCategoria');
  if (select.value === '__nova__') {
    input.style.display = 'block';
    input.required = true;
  } else {
    input.style.display = 'none';
    input.required = false;
  }
}

document.addEventListener('DOMContentLoaded', function () {
  // Preview ao carregar (edição)
  const preview = document.getElementById('previewImagem');
  if (preview) {
    const imagemAtual = preview.dataset.imagem;
    if (imagemAtual) atualizarPreview(imagemAtual);
  }

  // Preview ao trocar o select
  const selectImagem = document.getElementById('selectImagem');
  if (selectImagem) {
    selectImagem.addEventListener('change', function () {
      atualizarPreview(this.value);
    });
  }

  // Toggle nova categoria
  const selectCategoria = document.getElementById('selectCategoria');
  if (selectCategoria) {
    selectCategoria.addEventListener('change', function () {
      toggleNovaCategoria(this);
    });
  }
});