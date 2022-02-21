const inptSearch = document.querySelector('#searchbar')
const content = document.querySelector('#content')
const btnSearch = document.querySelector('#btnsearch')
const btnReset = document.querySelector('#btnall')

let param, url

//le "clic" sur le bonton rechercher affiche les résultats qui correspondent a la valeur de l'input #searchbar
//si searchbar est vide on revient avec tous les résultats
btnSearch.addEventListener('click', function () {
	if (inptSearch.value !== '') {
		param = inptSearch.value
	} else {
		param = 'All'
	}

	url = 'project?search=' + param

	url = encodeURI(url)
	fetch(url, { method: 'GET' })
		.then((response) => response.json())
		.then((data) => {
			console.log(data.content)
			return (content.innerHTML = data.content)
		})
		.catch((e) => console.error(e))
})

//retour de tous les résultats
btnReset.addEventListener('click', function () {
	inptSearch.value = ''
	param = 'All'
	url = 'project?search=' + param
	url = encodeURI(url)
	fetch(url, { method: 'GET' })
		.then((response) => response.json())
		.then((data) => (content.innerHTML = data.content))
		.catch((e) => console.error(e))
})

//permet d'utiliser la touche "Enter" à la place du "clic"
inptSearch.addEventListener('keyup', function (e) {
	if (e.keyCode === 13) {
		e.preventDefault()
		btnSearch.click()
	}
})
