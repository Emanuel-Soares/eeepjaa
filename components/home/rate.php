<style>
  .heading {
    font-family: "Atma", cursive;
  }
</style>

<div id="rate" class="modal">
  <div class="modal-content center">
    <form id="rate-form" method="post">
      <div class="center">
        <img style="max-height: 80px" src="/assets/icons/logo.webp" alt="Logo">
      </div>
      <h2 style="font-size: 1.6em" class="heading">O que achou de nosso site? Avalie-nos!</h2>
      <p class="range-field">
        <input type="range" class="orange" name="rate" min="0" max="10" />
      </p>
      <button class="btn teal darken-4 waves-effect waves-light" type="submit">Enviar</button>
    </form>
  </div>
  <div class="modal-footer">
    <button type="button" class="modal-action orange modal-close waves-effect waves-green btn-flat">Fechar</button>
  </div>
</div>

<script>
  $(document).ready(() => {
    const rateForm = document.getElementById('rate-form')
    const rateModal = $('#rate')
    rateForm.onsubmit = function(e) {
      e.preventDefault()

      const formData = new FormData(e.target)
      const formEntries = Array.from(formData.entries())

      const values = formEntries.reduce((acc, at) => {
        const [name, value] = at
        acc[name] = value
        return acc
      }, {})

      localStorage.setItem('rate', values.rate)

      rateModal.modal('close')
    }

    let qtd = 0
    const rate = !!window.localStorage.getItem('rate')

    function openModal(e) {
      const isReady = window.scrollY >= document.body.clientHeight * 0.70
      if (isReady && qtd === 0) {
        ++qtd
        return $('#rate').modal('open')
      }
    }

    if (!rate && qtd === 0) window.addEventListener('scroll', openModal, {
      passive: true
    })
  })
</script>