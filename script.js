console.log('test')
const toggleButton = document.getElementsByClassName('toggleButton')[0]
const iniHeader = document.getElementsByClassName('header')[0]

toggleButton.addEventListener('click', () => {
    iniHeader.classList.toggle('header')
})