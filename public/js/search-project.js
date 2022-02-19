const inptSearch = document.querySelector('#searchbar')
const content = document.querySelector('#content')
const btnSearch = document.querySelector('#btnsearch')
const btnReset = document.querySelector('#btnall')

let param, url
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

inptSearch.addEventListener('keyup', function (e) {
	if (e.keyCode === 13) {
		e.preventDefault()
		btnSearch.click()
	}
})
