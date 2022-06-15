const alertPlaceholder = document.querySelector('#tableProducts')

const alert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.querySelector('#deleteProduct')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    alert('Produto excluído com sucesso', 'success')
  })
}