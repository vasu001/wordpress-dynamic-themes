$(function () {

	const navIcon = $('#nav-pull-icon')

	navIcon.click(() => {
		const displayFrontHeaderSmall = $('#front-header-nav-small')
		displayFrontHeaderSmall.toggle(300)
	})

})