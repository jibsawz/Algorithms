//selection sort
function selectionSort(arr ) {
  const n = arr.length;

  for (let i = 0; i < n - 1; i++) {
    let minIndex = i;
    for (let j = i + 1; j < n; j++) {
      if (arr[j] < arr[minIndex]) {
        minIndex = j;
      }
    }

    // Smallest converter with current element
    [arr[minIndex], arr[i]] = [arr[i], arr[minIndex]];
  }
  return arr
}
//bubble sort
function bubbleSort(arr ) {
  for (let i in arr) {
    for (let j = 0; j < arr.length - i; j++) {
      if (arr[j] > arr[j + 1]) {
        //swap
        let arrEl1 = arr[j];
        let arrEl2 = arr[j + 1];

        arr[j] = arrEl2;
        arr[j + 1] = arrEl1;
      }
    }
  }

  return arr;
}
//insertion sort
function insertionSort() {
  for (let i in arr) {
    if (arr[i] < arr[i - 1]) {
      let j = i;

      while (arr[j] < arr[j - 1] && j > 0) {
        let arrEl1 = arr[j];
        let arrEl2 = arr[j - 1];

        arr[j] = arrEl2;
        arr[j - 1] = arrEl1;
        j -= 1;
      }
    }
  }

  return arr
}
export {selectionSort}