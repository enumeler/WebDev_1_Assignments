function prime_or_not(num)
{
  let status = 0 /* 0 for not prime, 1 for prime */
  if(!(num % 2 == 0) && num > 2) /* If a number is even and greater than 2, it is automatically composite */
    {
      half_num = Math.floor(num / 2); /* If we have a number say 100, the biggest number we can hope that divides 100 is 50. 51 or greater number cannot divide 100 */
      for(i = 3; i < half_num; i+= 2) /* Since half_num is calculated once and never changed, why recalculate it in each loop? /*
        {                             /* Also because an even number never divides prime number, we can skip even numbers from check */
          if(num % i == 0)
            {
              status = 0;
             /* console.log("Divisible by "+i); */
              break;
            }
        }
        
    
  else if(num == 2)
    {
      status = 1;
    }
    
  else
    {
      status = 0;
      /* console.log("Even"); */
    }
  
  if(status == 1) /* Interprete the status value within the function */
    {
      console.log("Prime");
    }
  else
    {
      console.log("Not Prime");
    }
}
