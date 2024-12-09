import "flowbite";

const SearchAddressBtn = document.getElementById('search_address_btn');

// 郵便番号にて住所検索
async function fetchAddress() {
    const zipcodeInput = document.getElementById('zipcode');
    const prefInput = document.getElementById('pref_input');
    const cityInput = document.getElementById('city_input');
    let zipcode = zipcodeInput.value.replace(/-/g, ''); // ハイフンを除去

    // 郵便番号が7桁でない場合は処理を中断
    if (zipcode.length !== 7) {
        alert('郵便番号は7桁で入力してください');
        return;
    }

    // APIリクエスト
    try {
        const response = await fetch(`https://zipcloud.ibsnet.co.jp/api/search?zipcode=${zipcode}`);
        const data = await response.json();

        if (data.results) {
            prefInput.value = data.results[0].address1; // 都道府県をセット
            cityInput.value = data.results[0].address2 + data.results[0].address3; // 市区町村をセット
        } else {
            prefInput.value = "住所が見つかりません";
            cityInput.value = "住所が見つかりません";
        }
    } catch (error) {
        console.error('住所検索エラー:', error);
        prefInput.value = "エラーが発生しました";
        cityInput.value = "エラーが発生しました";
    }
}

SearchAddressBtn.addEventListener('click', fetchAddress);

// 食事会場追加ボタン
document.getElementById('add_venue_btn').addEventListener('click', function () {
    // 元の <aside> 要素を取得
    const originalAside = document.querySelector('#venue_container aside');

    // <aside> をコピー
    const clonedAside = originalAside.cloneNode(true);

    // コピーした要素内の入力フィールドを初期化
    const inputs = clonedAside.querySelectorAll('input');
    inputs.forEach(input => {
        input.value = ''; // 入力値をリセット
    });

    // 備考欄要素を取得
    const VenueMemoContainer = document.getElementById('venue_memo_container');

    // 備考欄の前にコピーした <aside> を挿入
    const venueContainer = document.getElementById('venue_container');
    venueContainer.insertBefore(clonedAside, VenueMemoContainer);
});
