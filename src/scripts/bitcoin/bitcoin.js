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

      let price = await getBitcoinPrices();
      bitcoinInfo.innerHTML = `<div>
      <p>قیمت بیتکوین به دلار : ${price.usd} </p>
      <p>قیمت بیتکوین به ریال : ${price.toman.toLocaleString()} </p>
      <p></p>
      </div>`;
    },
    { once: true }
  );
});

async function getBitcoinPrices() {
  try {
    const response = await fetch(
      "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd"
    );
    const data = await response.json();
    const btcPriceUsd = data.bitcoin.usd; 


    const nobitexRes = await fetch("https://api.nobitex.ir/market/stats", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        srcCurrency: "btc", //  
        dstCurrency: "rls", //  
        action: "market-stats",
      }),
    });

    const nobitexData = await nobitexRes.json();
    const btcPriceToman = nobitexData.stats["btc-rls"].latest; // قیمت بیت‌کوین به تومان

    return {
      usd: btcPriceUsd,
      toman: parseInt(btcPriceToman, 10),
    };
  } catch (error) {
    console.error("Error fetching Bitcoin prices:", error.message);
  }
}
