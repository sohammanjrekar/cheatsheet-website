// https://www.codechef.com/problems/INTEST
#include <iostream>
using namespace std;

int main()
{
    long int number_of_tokens, token, divider;
    int counter = 0;
    cin >> number_of_tokens >> divider;
    // Best case: There are no number to analize; 
    if (number_of_tokens == 0)
    {
        cout << '0';
        return 0;
    }

    for (int i = 0; i < number_of_tokens; i++)
    {
        cin >> token;
        if (token % divider == 0)
            counter++;
    }
    cout << counter;
    return 0;
}
