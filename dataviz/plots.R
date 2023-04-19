library(tidyverse)
library(foreign)
library(lubridate)

## Read from file ./date-signatures-2023-04-19.csv to df_dates
df_dates <- read_csv("dataviz/date-signatures-2023-04-19.csv")

## Add cummulative number of signatures up to that date to df_dates
for (i in 1:nrow(df_dates)) {
    df_dates[i, "cumsum"] <- sum(df_dates[1:i, "signatures"])
}

## Plot the number of signatures per day as a bar graph and the cummulative number of signatures as a line
ggplot(df_dates, aes(x = date, y = signatures)) +
    geom_bar(stat = "identity", fill = "blue", show.legend = TRUE) +
    geom_line(aes(y = cumsum), color = "red", show.legend = TRUE) +
    labs(
        title = "Development of the number of signatures",
        x = "Date",
        y = "Number of signatures"
    ) +
    theme(plot.title = element_text(hjust = 0.5), legend.position = "bottom") +
    scale_fill_identity(name = "Test", guide = "legend", labels = c("m1"))
