const wprowadzKwoteKredytu = document.querySelector(".kredyt-kwota")
const wprowadzOprocentowanie = document.querySelector(".oprocentowanie")
const wprowadzOkres = document.querySelector(".kredyt-okres")

const wartoscRaty = document.querySelector(".rata .value")
const wartoscOdsetek = document.querySelector(".odsetki .value")
const wartoscPelnejKwoty = document.querySelector(".pelna-kwota .value")

const calculateBtn = document.querySelector(".calculate-btn")

let kwotaKredytu = parseFloat(wprowadzKwoteKredytu.value)
let oprocentowanie = parseFloat(wprowadzOprocentowanie.value)
let okresKredytu = parseFloat(wprowadzOkres.value)

let odsetki = oprocentowanie / 12 / 100

const obliczRate = () => {
	let rata = kwotaKredytu * odsetki * (Math.pow(1 + odsetki, okresKredytu) / (Math.pow(1 + odsetki, okresKredytu) - 1))
	return rata
}

const odswiezDane = rata => {
	wartoscRaty.innerHTML = Math.round(rata)

	let pelnaKwota = Math.round(okresKredytu) * rata
	wartoscPelnejKwoty.innerHTML = pelnaKwota.toFixed()

	let calaKwotaDoZaplaty = Math.round(pelnaKwota - kwotaKredytu)
	wartoscOdsetek.innerHTML = calaKwotaDoZaplaty
}

const init = () => {
	let rata = obliczRate()
	odswiezDane(rata)
}

init()

const odswiezPodaneWartosci = () => {
	kwotaKredytu = parseFloat(wprowadzKwoteKredytu.value)
	oprocentowanie = parseFloat(wprowadzOprocentowanie.value)
	okresKredytu = parseFloat(wprowadzOkres.value)
	odsetki = oprocentowanie / 12 / 100
}

calculateBtn.addEventListener("click", () => {
	odswiezPodaneWartosci()
	let rata = obliczRate()
	odswiezDane(rata)
})
