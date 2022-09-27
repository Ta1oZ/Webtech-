const img = document.getElementsByTagName("img");
        function spin() {
            const tmp = img[0].src;
            img[0].src = img[2].src;
            img[2].src = img[3].src;
            img[3].src = img[1].src;
            img[1].src = tmp;
        }