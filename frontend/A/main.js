async function callApi() {
  const res = await fetch('https://catfact.ninja/fact');
    const json = await res.json();
    return json;
}

function clickButton() {
    callApi().then(function (json) {
        document.getElementById('sentence').textContent = json.fact;
    })
}

document.getElementById('btn').addEventListener('click', clickButton);
