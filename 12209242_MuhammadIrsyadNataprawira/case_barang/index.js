const showList = document.getElementById('showList');
        const allData = document.getElementById('allData');
        let isListShown = false;
        let isAllDataShown = false;

        function toggleTable(tableElement, isShown) {
            if (isShown) {
                tableElement.style.display = 'none';
            } else {
                tableElement.style.display = 'block';
            }
            return !isShown;
        }

        document.getElementById('tampilkanBarang').addEventListener('click', function() {
            isListShown = toggleTable(showList, isListShown);
            if (isAllDataShown) {
                toggleTable(allData, isAllDataShown);
                isAllDataShown = false;
            }
        });

        document.getElementById('showAll').addEventListener('click', function() {
            isAllDataShown = toggleTable(allData, isAllDataShown);
            if (isListShown) {
                toggleTable(showList, isListShown);
                isListShown = false;
            }
        });