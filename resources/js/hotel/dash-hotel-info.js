const SearchAddressBtn = document.getElementById('search_address_btn');

async function fetchAddress() {
    const zipcodeInput = document.getElementById('zipcode');
    const addressInput = document.getElementById('address');
    const zipcode = zipcodeInput.value.replace(/-/g, ''); // ハイフンを除去

    // 郵便番号が7桁でない場合は処理を中断
    if (zipcode.length !== 7) {
        addressInput.value = "";
        return;
    }

    // APIリクエスト
    try {
        const response = await fetch(`https://zipcloud.ibsnet.co.jp/api/search?zipcode=${zipcode}`);
        const data = await response.json();

        if (data.results) {
            const address = `${data.results[0].address1} ${data.results[0].address2} ${data.results[0].address3}`;
            addressInput.value = address; // 住所を入力欄に設定
        } else {
            addressInput.value = "住所が見つかりません";
        }
    } catch (error) {
        console.error('住所検索エラー:', error);
        addressInput.value = "エラーが発生しました";
    }
}

SearchAddressBtn.addEventListener('click', fetchAddress);


