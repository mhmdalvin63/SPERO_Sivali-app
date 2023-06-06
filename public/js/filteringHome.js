        const listArea = document.getElementById('listArea');
        const btnterbaru = document.getElementById('btnterbaru');
        const btnterlaris = document.getElementById('btnterlaris');
        const btntermurah = document.getElementById('btntermurah');
        const btntermahal = document.getElementById('btntermahal');
        // const btnpromo = document.getElementById('btnpromo');

        // The Original Array
        const architects = "{{$barang}}";
        // var architects = {!! json_encode($barang->toArray()) !!};   
        // var architects = @json($barang);
        console.log(architects)
        // alert("architects")

        function btnterbaru() {
            architects.sort();
            populateList();
        }
        function btnterlaris() {
            architects.sort();
            populateList();
        }
        function btntermurah() {
            architects.sort();
            populateList();
        }
        function btntermahal() {
            architects.sort().reverse();
            populateList();
        }

        function populateList() {
            listArea.innerHTML = '';
            architects.forEach(a => {
                const list = document.createElement('li');
                list.innerText = a;
                listArea.appendChild(list);
            });
        }

        // Click Events for the sort buttons
        btnterbaru.addEventListener('click', btnterbaru);
        btnterlaris.addEventListener('click', btnterlaris);
        btntermurah.addEventListener('click', btntermurah);
        btntermahal.addEventListener('click', btntermahal);

        window.addEventListener('onload', populateList());