public class HumanReadableTime {

    public static String makeReadable(int seconds) {
        // Do something
        if (seconds < 60) {
            return "00:00:" + String.format("%02d", seconds);
        }

        int hh = seconds / 3600;
        int mm = (seconds - (hh * 3600)) / 60;
        int ss = (seconds - (hh * 3600)) - mm * 60;
        return String.format("%02d:", hh) + String.format("%02d:", mm) + String.format("%02d", ss);
    }

    // simple way
    public static String makeReadable2(int seconds) {
        return String.format("%02d:%02d:%02d", seconds / 3600, (seconds / 60) % 60, seconds % 60);
    }
}