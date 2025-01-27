export const ArraysAreEqual = (arr1: any[], arr2: any[]): boolean => {
  return (
    arr1.length === arr2.length &&
    arr1.every((value, index) => value === arr2[index])
  );
};
