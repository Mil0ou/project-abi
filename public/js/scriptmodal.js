const btnconnexion = document.querySelector('.connexion')
const layoutdiv = document.querySelector('.form-pos')
const form = document.querySelector('.formulaire-connect')
const btnclose = document.querySelector('.closebtn')

btnconnexion.addEventListener('click', function () {
	layoutdiv.style.display = 'block'
	form.style.display = 'block'
	form.style.transition = 'opacity 0.2s ease-in-out'
	layoutdiv.style.transition = 'opacity 0.2s ease-in-out'
	setTimeout(() => {
		layoutdiv.style.opacity = 1
		form.style.opacity = 1
	}, 200)
})

layoutdiv.addEventListener('click', function (e) {
	if (e.target === layoutdiv) {
		layoutdiv.style.opacity = 0
		form.style.opacity = 0
		form.style.transition = 'opacity 0.2s ease-in-out'
		layoutdiv.style.transition = 'opacity 0.2s ease-in-out'
		setTimeout(() => {
			layoutdiv.style.display = 'none'
			form.style.display = 'none'
		}, 200)
	} else {
		e.preventDefault
	}
})

btnclose.addEventListener('click', function (e) {
	e.preventDefault
	layoutdiv.style.opacity = 0
	form.style.opacity = 0
	setTimeout(() => {
		layoutdiv.style.display = 'none'
		form.style.display = 'none'
	}, 200)
})
