function convert_to_hex(decimal)
{
    var hex_characters = ['A','B','C','D','E','F'];
    var hex = [];
    

    while(true)
    {
        moded_hex = decimal % 16;
        if(moded_hex >= 10)
        {
            hex.push(hex_characters[moded_hex % 10]);
        }
        else
        {
            hex.push(moded_hex.toString());
        }
        decimal = Math.floor(decimal / 16);
        if(decimal <= 0)
        {
            break;
        }

    }
    
   return hex.reverse().join('');
}