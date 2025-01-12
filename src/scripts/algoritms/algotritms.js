//selection sort
function selectionSort(arr) {
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
  return arr;
}
//bubble sort
function bubbleSort(arr) {
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

  return arr;
}
export { selectionSort };

// merge algorithm

function merge(arr1, arr2) {
  // Result array to store the merged list
  const C = [];
  // Pointer for the current position in array A
  let i = 0,
    // Pointer for the current position in array B
    j = 0;

  // Merge elements from both arrays while both have remaining items
  while (i < A.length && j < B.length) {
    if (A[i] < B[j]) {
      // Add the smaller element from A to the result
      C.push(A[i]);
      i++;
    } else {
      // Add the smaller element from B to the result
      C.push(B[j]);
      j++;
    }
  }

  // Append any remaining elements from A
  while (i < A.length) {
    C.push(A[i]);
    i++;
  }

  // Append any remaining elements from B
  while (j < B.length) {
    C.push(B[j]);
    j++;
  }
  // Return the fully merged and sorted array
  return C;
}

// quick sort algorithm

function quickSort(arr) {
  // If the array length is one or less, it's already sorted
  if (arr.length <= 1) {
    return arr;
  }

  // Choose the pivot
  const pivot = arr[Math.floor(arr.length / 2)];

  // Divide the array into three parts
  // Elements smaller than the pivot
  const left = arr.filter((num) => num < pivot);
  // Elements equal to the pivot
  const middle = arr.filter((num) => num === pivot);
  // Elements greater than the pivot
  const right = arr.filter((num) => num > pivot);

  // Recursive: Sort the left and right parts
  return [...quickSort(left), ...middle, ...quickSort(right)];
}
