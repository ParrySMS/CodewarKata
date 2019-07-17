#include <iostream>
#include <iomanip>
#include <cstdlib>
#include <ctime>
using namespace std;

const int LEN = 21;
const int KEY_INDEX = -1;

int main() {

	int tmp,i,j,rand_index,key;
	int *arr = new int[LEN];

	for(i=0; i<LEN; i++) {
		arr[i] = i;
	}

	srand((unsigned)time(NULL));

	rand_index = rand()%(LEN+1);
	key = (KEY_INDEX == -1)? rand_index:KEY_INDEX;

	cout<<"key:"<<key<<endl;
	cout<<endl;

	for(i = LEN -1; i>0; i--) {
		cout<<endl;
		rand_index = rand()%(i+1);
		//swap
		tmp = arr[i];
		arr[i] = arr[rand_index];
		arr[rand_index] = tmp;

		cout<<"swap:arr["<<i<<"]"<<"--arr["<<rand_index<<"]"<<endl;
		cout<<"after swap:"<<endl;
		for(j=0; j<LEN; j++) {
			if(j==i||j==rand_index) {
				cout<<" *";
			}
			cout<<arr[j]<<" ";
		}
		cout<<endl;
	}

	cout<<endl;
	cout<<"result:"<<arr[key]<<endl;

	return 0;
}
