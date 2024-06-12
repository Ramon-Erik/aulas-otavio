const enviar = (e) => {
    e.preventDefault()
    
    const satisfacao = document.querySelector('select#satisfacao').value
    
    fetch('https://api.sheetmonkey.io/form/8aXiVzt9FBsoyABotiYeYp', {
        method: 'post',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            'Nível de Satisfação': satisfacao,
        }),
    }).then(() => {
        alert('Enviado com sucesso!')
        window.location.reload(true)
    })
}

document.querySelector('form').addEventListener('submit', enviar)