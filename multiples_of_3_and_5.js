/* Variation 1: Using a single if block */

sum = 0;
for(i = 0; i < 100; i++)
{
  if(i % 3 == 0 && i % 5 == 0)
  {
    sum += i;
  }
}
console.log(sum)


/* Variation 2: Using a nested if block */

result = 0;
for(j = 0; j < 100; j++)
{
  if(j % 5 == 0)
  {
    if(j % 3 == 0)
    {
      result += j;
    }
  }
}
console.log(result);
