function selectionSort(arr : number[]) {
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


export {selectionSort}