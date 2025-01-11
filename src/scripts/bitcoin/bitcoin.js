import axios from "axios";

const bitcoinIcon = document.getElementById("bitcoin-icon");
const bitcoinInfo = document.getElementById("bitcoin-info");

bitcoinIcon.addEventListener("click", () => {
  bitcoinIcon.classList.add("spin");

  bitcoinIcon.addEventListener(
    "animationend",
    async () => {
      bitcoinIcon.style.display = "none";
      bitcoinInfo.classList.remove("hidden");
      bitcoinInfo.style.display = "block";
      let price =await getBitcoinPrices()
      bitcoinInfo.innerHTML =  `<div>
      <p>قیمت بیتکوین به دلار : ${price.usd} </p>
      <p>قیمت بیتکوین به ریال : ${price.toman.toLocaleString()} </p>
      <p></p>
      </div>`
      
    },
    { once: true }
    
  );
});

async function getBitcoinPrices() {
  try {
    // قیمت بیت‌کوین به دلار
    const response = await axios.get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
    const btcPrice = response.data.bitcoin.usd; // قیمت بیت‌کوین به دلار

    // قیمت بیت‌کوین به تومان
    const nobitexRes = await axios.post('https://api.nobitex.ir/market/stats', {
      srcCurrency: 'btc',
      dstCurrency: 'rls',
    });
    const btcToman = nobitexRes.data.stats['btc-rls'].latest;

    return {
      usd : btcPrice,
      toman : parseInt(btcToman)
    }
  } catch (error) {
    console.error('Error fetching Bitcoin prices:', error.message);
  }
}
