public class Main {

    public static int tour(int petrol[], int distance[]) {
        int startPetrol;
        int endPetrol = petrol.length;
        for (startPetrol = 0; startPetrol < endPetrol; startPetrol++) {
            int index = startPetrol;
            int oil = petrol[startPetrol];
            while (oil - distance[index] >= 0) {
                oil -= distance[index];
                index++;
                index = index % endPetrol;
                oil += petrol[index];
                if (index == endPetrol - 1 && oil - distance[index] >= 0) {
                    return startPetrol;
                }
            }
        }
        return -1;
    }

    //other good idea
    public static int tour2(int petrol[], int distance[]) {
        return IntStream.range(0, petrol.length)
                .filter(i -> test(i, petrol, distance))
                .findFirst()
                .orElse(-1);
    }

    private static boolean test(int start, int[] petrol, int[] distance) {
        int fuel = 0;

        for (int i = 0; i < petrol.length; i++) {
            int l = (start + i) % petrol.length;
            fuel += petrol[l] - distance[l];
            if (fuel < 0) {
                return false;
            }
        }

        return true;
    }
}