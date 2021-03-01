window.onscroll = () => stickyMenu()

let header = document.getElementById("headerSticky")

function stickyMenu() {
  // window.pageYOffset > sticky
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    header.classList.add("-headerFixed")
  } else {
    header.classList.remove("-headerFixed")
  }
}