private class Serj
{
    private readonly IList<string> _dataList = new List<string>
    {
        "Argentina", "USA", "Moldova", "Italy", "France", "Ukraine",
        "Germany", "Canada", "Brazil", "Spain", "Portugal", "Netherlands",
        "Australia", "Japan", "South Korea", "Mexico", "India", "China",
        "South Africa", "Egypt", "Norway", "Sweden", "Finland", "Denmark",
        "Switzerland", "Greece", "Poland", "Austria", "New Zealand", "Turkey",
        "Uganda"
    };

    public IList<string> GetCountryesByKey(string key)
    {
        var result = new List<string>();

        foreach (string country in _dataList)
        {
            if (country.ToLower().StartWith(key.ToLower())) // !!
            {
                result.Add(country);
            }
        }
        return result;
    }

    public void Run()
    {
        Console.Clear();
        Console.Write("Introduce key: ");
        string key = Console.ReadLine();

        if (!string.IsNullOrEmpty(key))
        {
            IList<string> result = GetCountryesByKey(key);
            PrintResult(result);
        }
        else
        {
            Console.WriteLine("You must introduce the key!");            
        }
        Console.WriteLine("Press space to try again...");
        Console.ReadKey();
        Run();
    }

    private void PrintResult(IList<string> printList)
    {
        Console.WriteLine("We found " + result.Count + " results");

        if (result.Any())
        {
            string result = string.Join(",", printList);

            Console.WriteLine("--------------------------");
            Console.WriteLine(result);
            Console.WriteLine("--------------------------");
        }
    }
}