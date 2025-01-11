const bitcoinIcon = document.getElementById('bitcoin-icon');
const bitcoinInfo = document.getElementById('bitcoin-info');

bitcoinIcon.addEventListener('click', () => {
  bitcoinIcon.classList.add('spin');

  bitcoinIcon.addEventListener('animationend', async () => {
    bitcoinIcon.style.display = 'none';
    bitcoinInfo.classList.remove('hidden'); 
    bitcoinInfo.style.display = 'block'; 
  }, { once: true })})
